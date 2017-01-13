<?php

/*
 * Author:  Aing Ragunathan 
 * Date:    2017/01/12
 * 
 * COMP 4711 Internet Software Dev
 * Lab 1
 */

/**
 * The Student class will be used to test our webapp and git configuration for
 * lab 1.
 * 
 * The class holds information about a student's first and last name as well as 
 * a list of their email addresses and grades.
 * 
 * The class should also include a function to calculate the student's average
 * grade and convert the object's information into a formatted string for
 * output.
 *
 * @author Aingaran
 */
class Student {
    #Constructor for initiating Student objects.
    function __construct(){
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();        
    }   
    
    #Adds a new email address to the Student object's array of emails.
    function add_email($which,$address){
        $this->emails[$which] = $address;
    }
    
    #Adds a new grade to the Student object's array of grades
    function add_grade($grade){
        $this->grades[] = $grade;
    }
    
    #Calculates the Student's average grade using the grades array.
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    #Converts the Student object's information to a readable and formatted 
    #string.
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
