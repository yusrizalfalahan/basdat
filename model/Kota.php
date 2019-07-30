<?php

class Kota
{
    // get data from Booking Status
    function getListKota()
    {
        $conn = dbConnect();
        if ($conn->connect_errno == 0) {
            $sql = "SELECT * FROM booking_status";
            $res = $conn->query($sql);
            if ($res) {
                $data = $res->fetch_all(MYSQLI_ASSOC);
                $res->free();
                return $data;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    // get 1 data to put in edit form
    function getItemKota($booking_status_id)
    {
        $conn = dbConnect();
        if ($conn->connect_errno == 0) {
            $sql = "SELECT * FROM booking_status WHERE booking_status_id='$booking_status_id'";
            $res = $conn->query($sql);
            $data = $res->fetch_assoc();
            $row_cnt = $res->num_rows;

            if ($row_cnt == 1) {
                return $data;
            }

        } else {
            return false;
        }
    }

    // masukkan data Booking Status
    function insertKota($status)
    {
        $conn = dbConnect();
        if ($conn->connect_errno == 0) {
            $sql = "INSERT INTO booking_status(status) 
                      VALUES('$status')";
            $res = $conn->query($sql);
            if ($res) return true; else return false;
        }

    }

    // update data Booking Status
    function updateKota($booking_status_id, $status)
    {
        $conn = dbConnect();
        if ($conn->connect_errno == 0) {
            $sql = "UPDATE booking_status SET status='$status' WHERE booking_status_id='$booking_status_id' ";
            $res = $conn->query($sql);

            if ($res) return true; else return false;

        } else {
            return false;
        }
    }

    //delete 1 data Booking Status
    function deleteKota($booking_status_id)
    {
        $conn = dbConnect();
        if ($conn->connect_errno == 0) {
            $sql = "DELETE FROM booking_status WHERE booking_status_id='$booking_status_id'";
            $res = $conn->query($sql);
            if ($res) return true; else return false;
        } else {
            return false;
        }
    }
}

?>
