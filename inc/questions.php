<?php
	function showQuestions($array){
		foreach($array as $key=>$question){
			return $question.'<br>';
		}
	}