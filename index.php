<?php
class Singleton {
    private static $instance;

    // Захищений конструктор, щоб заборонити створення екземплярів ззовні
    private function __construct() {
    }

    // Глобальна точка доступу до єдиного екземпляру
    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    // Додаткові методи класу
    public function doSomething() {
        return 'Doing something';
    }
}

// Використання одинички
$instance1 = Singleton::getInstance();
$instance2 = Singleton::getInstance();

// $instance1 і $instance2 посилаються на той самий єдиний екземпляр
echo $instance1 === $instance2; // Виведе: 1 (true)

echo $instance1->doSomething(); // Виведе: Doing something
echo $instance2->doSomething(); // Виведе: Doing something
