<?php
  declare(strict_types=1);

  $receiving_email_address = 'xaydungquangvinh7788@gmail.com';

  if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo 'Phương thức gửi không hợp lệ.';
    exit;
  }

  if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
    include($php_email_form);
  } else {
    echo 'Không thể tải thư viện gửi email.';
    exit;
  }

  function quote_clean_text(string $value, int $max_length): string {
    $value = trim($value);
    $value = str_replace(["\r", "\0"], '', $value);
    $value = strip_tags($value);
    $value = preg_replace('/[ \t]+/', ' ', $value) ?? '';
    return function_exists('mb_substr') ? mb_substr($value, 0, $max_length, 'UTF-8') : substr($value, 0, $max_length);
  }

  function quote_input(string $key, int $max_length): string {
    return quote_clean_text((string) filter_input(INPUT_POST, $key, FILTER_UNSAFE_RAW), $max_length);
  }

  $name = quote_input('name', 80);
  $email = filter_var(quote_input('email', 120), FILTER_SANITIZE_EMAIL);
  $phone = quote_input('phone', 30);
  $address = quote_input('address', 160);
  $message = quote_input('message', 1500);

  $errors = [];

  if ($name === '') {
    $errors[] = 'Vui lòng nhập họ và tên.';
  }

  if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Email không hợp lệ.';
  }

  if ($phone === '' || !preg_match('/^[0-9+().\s-]{8,20}$/', $phone)) {
    $errors[] = 'Số điện thoại không hợp lệ.';
  }

  if ($address === '') {
    $errors[] = 'Vui lòng nhập địa chỉ công trình.';
  }

  if ($message === '') {
    $errors[] = 'Vui lòng nhập nội dung yêu cầu.';
  }

  if ($errors !== []) {
    echo implode('<br>', $errors);
    exit;
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  $contact->to = $receiving_email_address;
  $contact->from_name = $name;
  $contact->from_email = $email;
  $contact->subject = 'Yêu cầu báo giá từ website Quang Vinh';

  $contact->add_message($name, 'Họ và tên');
  $contact->add_message($email, 'Email');
  $contact->add_message($phone, 'Số điện thoại');
  $contact->add_message($address, 'Địa chỉ công trình');
  $contact->add_message($message, 'Nội dung yêu cầu', 10);

  echo $contact->send();
?>
