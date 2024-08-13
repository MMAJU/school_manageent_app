<?php
require_once("../PhpConnections/connection.php");
 class ExamRecords{
            public function create_exam_table_header($student_id, $term_id, $session_id){
                $conn = connect();

                // $created_At = date("Y-m-d H:i:s");
                // $modified_At = date("Y-m-d H:i:s");

                $user_query  = $conn->prepare("SELECT student_exam_record.subject_id, subjects.Name FROM `student_exam_record` JOIN subjects ON subjects.id = student_exam_record.subject_id WHERE student_exam_record.student_id = :st AND session_id = :si AND term_id = :ti");
                $user_query->bindValue(":st", $student_id);
                $user_query->bindValue(":si", $session_id);
                $user_query->bindValue(":ti", $term_id);

                $user_query->execute();
                $row = $user_query->fetchAll(PDO::FETCH_ASSOC);
                return $row;
            }

            public function display_exam_table_record($student_id, $term_id, $session_id){
                $conn = connect();

                // $created_At = date("Y-m-d H:i:s");
                // $modified_At = date("Y-m-d H:i:s");

                $user_query  = $conn->prepare("SELECT
                student_exam_record.subject_id,
                 subjects.Name,
                student_exam_record.ca1,
                student_exam_record.ca2,
                student_exam_record.examinations,
                student_exam_record.total,
                student_exam_record.remark
               
            FROM
                student_exam_record
            JOIN
                subjects
            ON
                student_exam_record.subject_id = subjects.id; WHERE student_exam_record.student_id = :st AND session_id = :si AND term_id = :ti");
                $user_query->bindValue(":st", $student_id);
                $user_query->bindValue(":si", $session_id);
                $user_query->bindValue(":ti", $term_id);

                $user_query->execute();
                $row = $user_query->fetchAll(PDO::FETCH_ASSOC);
                return $row;
            }
 }

?>