<?php

class Exam //create a class
{
  public $id;
  public $subj;
  public $mark;

  function set_student_id($id)
  {
    $this->id=$id;
  }
  function get_student_id()
  {
    return $this->id;
  }
  function set_student_subj($subj)
  {
    $this->subj=$subj;
  }
  function get_student_subj()
  {
    return $this->subj;
  }
  function set_student_mark($mark)
  {
    $this->mark=$mark;
  }
  function get_student_mark()
  {
    return $this->mark;
  }
}

$exam_1= new Exam(); //create an Object

$exam_1->set_student_id("111 ");//assign value

echo "Student_id: ".$exam_1->get_student_id(); //display value

echo "<br>";

$exam_1->set_student_subj("English ");

echo "Student_subject: ".$exam_1->get_student_subj();

echo "<br>";

$exam_1->set_student_mark("85 ");

echo "Student_marks: ".$exam_1->get_student_mark();

/*Output:
Student_id: 111
Student_subject: English
Student_marks: 85
*/

 ?>
