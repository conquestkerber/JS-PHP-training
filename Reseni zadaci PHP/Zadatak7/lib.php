<?php

include 'student.php';

// Osnovne funkcije za rad sa bazom podataka

function vrati_sve_studente()
{
    // funkcija za konektovanje na bazu podataka
    // parametri su server_baze, username, password, ime_baze
    $con = new mysqli("localhost", "root", "", "zadatak7");
    if ($con->connect_errno)
    {
        // u slucaju greske odstampati odgovarajucu poruku
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else
    {
        // $res je rezultat izvrsenja upita
        $res = $con->query("select * from student");
        if ($res)
        {
            $niz = array();
            // fetch_assoc() pribavlja jedan po jedan red iz rezulata
            // u redosledu u kom ga je vratio db server i pakuje vrednosti u
            // niz objekata
            while ($row = $res->fetch_assoc())
            {
                $student = new Student($row['indeks'], $row['ime'],
                        $row['prezime'], $row['godina']);
                $niz[$row['indeks']] = $student;
            }
            // zatvaranje objekta koji cuva rezultat
            $res->close();
            return $niz;
        }
        else
        {
            print ("Query failed");
        }
    }
}

function brisi_studenta($indeks)
{
    $con = new mysqli("localhost", "root", "", "zadatak7");
    if ($con->connect_errno)
    {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else
    {
        $query_text = "DELETE FROM student WHERE indeks = '$indeks'";
        $res = $con->query($query_text);
        if (!$res)
        {
            print ("Query failed");
        }
        else
        {
            return true;
        }
    }
    return false;
}

function dodaj_studenta(Student $student)
{
    $con = new mysqli("localhost", "root", "", "zadatak7");
    if ($con->connect_errno)
    {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else
    {
        $query_text = "INSERT INTO student (indeks, ime, prezime, godina) VALUES ("
                . "'$student->indeks', '$student->ime', '$student->prezime', '$student->godina')";
        $res = $con->query($query_text);
        if (!$res)
        {
            print ("Query failed");
        }
        else
        {
            return true;
        }
    }
    return false;
}


?>
