<?php
require_once __DIR__ . '/database.php';
if (session_status() === PHP_SESSION_NONE)
 session_start();
function e($value): string
{
 return htmlspecialchars((string) ($value ?? ''), ENT_QUOTES, 'UTF-8');
}
function authUser(): ?array
{
 return $_SESSION['user'] ?? null;
}
function requireLogin(): void
{
 if (!authUser()) {
  $_SESSION['errors'] = ['login' => 'Silakan masuk terlebih dahulu.'];
  header('Location: /pages/auth/login.php');
  exit;
 }
}
function requireAdmin(): void
{
 requireLogin();
 if ((authUser()['role'] ?? '') !== 'admin') {
  http_response_code(403);
  require __DIR__ . '/../pages/errors/403.php';
  exit;
 }
}
function flash(string $key): ?string
{
 $v = $_SESSION[$key] ?? null;
 unset($_SESSION[$key]);
 return is_string($v) ? $v : null;
}
function redirect(string $url): never
{
 header('Location: ' . $url);
 exit;
}
function old(string $key, $default = '')
{
 return $_SESSION['old'][$key] ?? $default;
}
function errors(): array
{
 $v = $_SESSION['errors'] ?? [];
 unset($_SESSION['errors']);
 return is_array($v) ? $v : [];
}
function failForm(array $errors, array $data, string $url): never
{
 unset($data['password'], $data['password_confirmation']);
 $_SESSION['errors'] = $errors;
 $_SESSION['old'] = $data;
 redirect($url);
}
function validateDateValue($v): bool
{
 $d = DateTime::createFromFormat('Y-m-d', (string) $v);
 return $d && $d->format('Y-m-d') === $v;
}
