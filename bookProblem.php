<?php
function findABook(array $bookList, String $bookName)
{
    echo "<h4>Inside Find A Book Function<h4>";
    $found = FALSE;
    foreach ($bookList as $index => $book) {
        if ($book === $bookName) {
            $found = $index;
            echo "<h4>Book Found<h4><br>";
            break;
        }
    }
    return $found;
}
function placeAllBooks(array $orderedBooks, array &$bookList)
{
    echo "<h4>Inside Place All Books<h4><br>";
    foreach ($orderedBooks as $book) {
        $bookFound = findABook($bookList, $book);
        if ($bookFound !== FALSE) {
            array_splice($bookList, $bookFound, 1);
            echo "<h4>Book Removed From List<h4>";
        }
    }
}
$bookList = ['PHP', 'MySQL', 'PGSQL', 'Oracle', 'Java'];
$orderedBooks = ['MySQL', 'PGSQL', 'Java'];
placeAllBooks($orderedBooks, $bookList);
echo "<h4>Remainining Books:<h4>";
echo implode(",", $bookList);
