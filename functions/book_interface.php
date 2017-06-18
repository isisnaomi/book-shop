<?php

  header("Access-Control-Allow-Origin: *");
  header('Access-Control-Allow-Methods: GET, POST');
  header("Access-Control-Allow-Headers: X-Requested-With, Content-type");
  
  // Getting the params
  $action = isset($_GET['action']) ? $_GET['action'] : null;
  $book_id = isset($_GET['book_id']) ? $_GET['book_id'] : null;
  $ammount = isset($_GET['ammount']) ? $_GET['ammount'] : null;

  $are_params_incomplete = is_null($action) || is_null($book_id) || is_null($ammount);
  if ($are_params_incomplete) die('false');

  // Calling dependencies 
  include_once 'book_manager.php';
  $book = get_book($book_id);

  // Action!
  switch ($action) {
    case 'has-enough':
      if ($book['ammount'] > $ammount) die('true');
      else die('false');
    break;
    case 'reduce':
      if ($book['ammount'] >= $ammount) {
        $bookId = $book['id'];
        $toReduce = $book['ammount'] - $ammount;
        $result = run_sql_query("UPDATE books SET ammount=$toReduce WHERE id=$bookId");
        die('true');
      } else die($book['ammount']);
    default:
      die('false');
    break;
  }