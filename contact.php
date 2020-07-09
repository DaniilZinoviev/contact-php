<?php

class Contact {
    
    /**
     * @var array
     */
    // protected $request;

    /**
     * Constructor
     *
     * @param array $request
     */
    public function __construct(array $request)
    {
        $name       = (string) strip_tags($request['name']);
        $email      = (string) strip_tags($request['email']);
        $message    = (string) strip_tags($request['message']);

        // $this->validate($request);

        // $this->send
    }

    /**
     * Constructor
     *
     * @param array $request
     */
    public function validate(array $request)
    {
        $name       = strip_tags($request['name']);
        $email      = strip_tags($request['email']);
        $message    = strip_tags($request['message']);
        // todo
    }

    /**
     * Constructor
     *
     * @param array $request
     */
    // public function handle(array $request)
    // {
    //     $name       = strip_tags($request['name']);
    //     $email      = strip_tags($request['email']);
    //     $message    = strip_tags($request['message']);
    //     // todo
    // }
}

if (isset($_POST['request'])) {
    new Contact($_POST['request']);
}
