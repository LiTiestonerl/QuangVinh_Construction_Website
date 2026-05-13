<?php
  declare(strict_types=1);

  class PHP_Email_Form {
    public bool $ajax = false;
    public string $to = '';
    public string $from_name = '';
    public string $from_email = '';
    public string $subject = '';
    public array $smtp = [];
    private array $messages = [];

    public function add_message(string $content, string $label = '', int $priority = 0): void {
      $this->messages[] = [
        'content' => $this->sanitize($content),
        'label' => $this->sanitize($label),
        'priority' => $priority,
      ];
    }

    public function send(): string {
      if ($this->to === '' || !filter_var($this->to, FILTER_VALIDATE_EMAIL)) {
        return 'Email nhận không hợp lệ.';
      }

      if ($this->from_email === '' || !filter_var($this->from_email, FILTER_VALIDATE_EMAIL)) {
        return 'Email người gửi không hợp lệ.';
      }

      $subject = $this->sanitize($this->subject !== '' ? $this->subject : 'Website contact form');
      $fromName = $this->sanitize($this->from_name !== '' ? $this->from_name : $this->from_email);
      $body = $this->buildBody();
      $headers = [
        'MIME-Version: 1.0',
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . $this->formatMailbox($fromName, $this->from_email),
        'Reply-To: ' . $this->formatMailbox($fromName, $this->from_email),
        'X-Mailer: PHP/' . phpversion(),
      ];

      return mail($this->to, $subject, $body, implode("\r\n", $headers)) ? 'OK' : 'Không thể gửi email lúc này. Vui lòng thử lại sau.';
    }

    private function buildBody(): string {
      usort($this->messages, static fn(array $a, array $b): int => $a['priority'] <=> $b['priority']);

      $lines = [];
      foreach ($this->messages as $message) {
        $label = $message['label'] !== '' ? $message['label'] . ': ' : '';
        $lines[] = $label . $message['content'];
      }

      return implode("\n\n", $lines);
    }

    private function formatMailbox(string $name, string $email): string {
      $safeName = str_replace(['"', "\r", "\n"], '', $name);
      return sprintf('"%s" <%s>', $safeName, $email);
    }

    private function sanitize(string $value): string {
      $value = trim(strip_tags($value));
      $value = str_replace(["\r", "\0"], '', $value);
      return preg_replace('/[ \t]+/', ' ', $value) ?? '';
    }
  }
?>
