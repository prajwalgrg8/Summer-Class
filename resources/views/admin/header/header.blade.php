<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>@yield('title', 'IMDb Admin')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
  }

  .wrapper {
    display: flex;
    min-height: 100vh;
  }

  .sidebar {
    width: 250px;
    background-color: #212529;
    padding-top: 1rem;
    color: white;
    position: fixed;
    height: 100%;
  }

  .sidebar h4 {
    text-align: center;
    margin-bottom: 1.5rem;
  }

  .sidebar a {
    color: white;
    text-decoration: none;
    display: block;
    padding: 0.75rem 1rem;
  }

  .sidebar a:hover,
  .sidebar a.active {
    background-color: #495057;
    font-weight: bold;
  }

  .content-wrapper {
    margin-left: 250px;
    flex: 1;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
  }

  .content {
    flex: 1;
    padding: 1rem;
  }

  .footer {
    background-color: #212529;
    color: white;
    padding: 1rem;
    text-align: center;
  }

  .card-text {
    font-size: 1.5rem;
  }

  .img-thumbnail {
    max-height: 75px;
  }
  </style>

</head>
<body>
