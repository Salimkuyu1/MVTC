<?php

$query = "SELECT 
            t.name AS subjectTeacher, 
            s.subjectname AS subjects, 
            c.name, 
            c.time, 
            
                    FROM class_subjects AS cs
                    LEFT JOIN subjects AS s
                    ON cs.subject_id = s.id 
                    
                    LEFT JOIN teachers AS t
                    ON cs.teacher_id = t.id
                    
                    LEFT JOIN class AS c
                    ON cs.class_id = c.id"