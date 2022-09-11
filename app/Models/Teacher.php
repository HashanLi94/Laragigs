<?php

namespace App\Models;

class Teacher
{
    public static function getAllTeachers() {
        return [
            [
                'id' => 1,
                'firstName' => 'Nimal',
                'lastName' => 'Ruupasinghe',
                'birthday' =>'1888/02/12'
            ],
            [
                'id' => 2,
                'firstName' => 'Nimal',
                'lastName' => 'Ruupasinghe',
                'birthday' =>'1888/02/12'
            ],
            [
                'id' => 3,
                'firstName' => 'Nimal',
                'lastName' => 'Ruupasinghe',
                'birthday' =>'1888/02/12'
            ]
        ];
    }

    public static function getTeacherById($request) {
        $teachers = self::getAllTeachers();
        foreach ($teachers as $teacher) {
            if ($teacher['id']== $request) {
                return $teacher;
            }
        }
    }
}
