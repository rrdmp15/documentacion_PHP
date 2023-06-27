<?php
// Ejemplo de json_encode:
$data = array(
    'name' => 'John Doe',
    'age' => 30,
    'email' => 'johndoe@example.com'
);

$json = json_encode($data);

echo $json;

// Ejemplo de json_decode:
$json = '{"name":"John Doe","age":30,"email":"johndoe@example.com"}';

$data = json_decode($json);

echo "Name: " . $data->name . "<br>";
echo "Age: " . $data->age . "<br>";
echo "Email: " . $data->email . "<br>";
?>

