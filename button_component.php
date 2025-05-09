<h3>Button Component</h3>

<?php

class Button {
    public $text;

    public function __construct($text) {
        $this->text = $text;
    }

    public function toString() {
        $style = "
            background-color: #8071ff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            ";

            return "<button style='{$style}'>{$this->text}</button>";
    }
}

$button = new Button("Click me");
echo $button->toString();

?>