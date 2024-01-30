<?php
// Ito ay para sa security headers
header("Content-Security-Policy: default-src 'self'");
header("Strict-Transport-Security: max-age=31536000; includeSubDomains; preload");
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: DENY");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: *");

$request_uri = $_SERVER['REQUEST_URI'];

// Aalisin yung mga query strings
$request_uri = strtok($request_uri, '?');

// ieextract nya yung first segment ng url
$uri_parts = explode('/', $request_uri);
$first_segment = $uri_parts[2];

// iinclude yung necesarry logic para sa first segment ng endpoint
switch ($first_segment) {
  case 'website':
    include('website/index.php');
    break;
  case 'admin':
    include('admin/index.php');
    break;
  case 'super-admin':
    include('super-admin/index.php');
    break;
  case 'rider':
    include('rider/index.php');
    break;
  case 'client':
    include('client/index.php');
    break;
  default:
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Invalid or unknown endpoint. Please check your request.']);
    break;
}
