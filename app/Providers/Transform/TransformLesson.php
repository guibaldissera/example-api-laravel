<?php 

namespace App\Providers\Transform;

class TransformLesson extends Transform
{
	
    /**
     * Transform a single lesson
     * 
     * @param $lesson
     * @return array
     */
    public function transform($lesson) {
        return [
            'title'  => $lesson['title'],
            'body'   => $lesson['body'],
            'active' => (boolean) $lesson['some_bool']
        ];
    } 

}