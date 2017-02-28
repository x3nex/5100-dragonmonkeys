<?php

class Task {
    public $title;

    public $completed;

    public function makeTaskCompleted() {
        $this->completed = true;
    }
}