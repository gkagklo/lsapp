<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'The :attribute must be accepted.',
    'active_url'           => 'The :attribute is not a valid URL.',
    'after'                => 'The :attribute must be a date after :date.',
    'after_or_equal'       => 'The :attribute must be a date after or equal to :date.',
    'alpha'                => 'The :attribute may only contain letters.',
    'alpha_dash'           => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'            => 'The :attribute may only contain letters and numbers.',
    'array'                => 'The :attribute must be an array.',
    'before'               => 'The :attribute must be a date before :date.',
    'before_or_equal'      => 'The :attribute must be a date before or equal to :date.',
    'between'              => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean'              => 'The :attribute field must be true or false.',
    'confirmed'            => 'Η επιβεβαίωση του κωδικού πρόσβασης δεν ταιριάζει.',
    'date'                 => 'The :attribute is not a valid date.',
    'date_format'          => 'The :attribute does not match the format :format.',
    'different'            => 'The :attribute and :other must be different.',
    'digits'               => 'The :attribute must be :digits digits.',
    'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => 'The :attribute must be a valid email address.',
    'exists'               => 'The selected :attribute is invalid.',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => 'The :attribute field must have a value.',
    'image'                => 'The :attribute must be an image.',
    'in'                   => 'The selected :attribute is invalid.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => 'The :attribute must be an integer.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'ipv4'                 => 'The :attribute must be a valid IPv4 address.',
    'ipv6'                 => 'The :attribute must be a valid IPv6 address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'mimetypes'            => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'Το :attribute πρέπει να περιέχει τουλάχιστον :min χαρακτήρες.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => 'Το :attribute είναι υποχρεωτικό.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => 'Το :attribute που εισάγατε χρησιμοποιείται.',
    'uploaded'             => 'The :attribute failed to upload.',
    'url'                  => 'The :attribute format is invalid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [

        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],

        'fact' => [
            'required' => 'Το πεδίο "Kατασκευαστής" είναι υποχρεωτικό.',
        ],

        'cpu' => [
            'required' => 'Το πεδίο "Eπεξεργαστής" είναι υποχρεωτικό.',
        ],

        'mboard' => [
            'required' => 'Το πεδίο "Μητρική κάρτα" είναι υποχρεωτικό.',
        ],

        'ram' => [
            'required' => 'Το πεδίο "Μνήμη Ram" είναι υποχρεωτικό.',
        ],

        'gpu' => [
            'required' => 'Το πεδίο "Κάρτα γραφικών" είναι υποχρεωτικό.',
        ],

        'disc' => [
            'required' => 'Το πεδίο "Αποθηκευτικός χώρος" είναι υποχρεωτικό.',
        ],

        'system' => [
            'required' => 'Το πεδίο "Λειτουργικό σύστημα" είναι υποχρεωτικό.',
        ],

        'price' => [
            'required' => 'Το πεδίο "Τιμή" είναι υποχρεωτικό.',
        ],

        'status' => [
            'required' => 'Το πεδίο "Κατάσταση" είναι υποχρεωτικό.',
        ],


        'cover_image' => [
            'mimes' => 'Η μορφή εικόνας πρέπει να είναι ένα απο τα παρακάτω αρχεία τύπου: :values.',
        ],

        'name' => [
            'required' => 'Το Όνομα είναι υποχρεωτικό',
            'max' => 'Το Όνομα δεν μπορεί να είναι μεγαλύτερο από :max χαρακτήρες.',
            'min' => 'Το Όνομα δεν μπορεί να είναι μικρότερο από :min χαρακτήρες.',
            'alpha' => 'Το Όνομα μπορεί να περιέχει μόνο γράμματα.',
        ],

        'lastname' => [
            'required' => 'Το Επώνυμο είναι υποχρεωτικό',
            'max' => 'Το Επώνυμο δεν μπορεί να είναι μεγαλύτερο από :max χαρακτήρες.',
            'min' => 'Το Επώνυμο δεν μπορεί να είναι μικρότερο από :min χαρακτήρες.',
            'alpha' => 'Το Επώνυμο μπορεί να περιέχει μόνο γράμματα.',
        ],

        'username' => [
            'required' => 'Το Όνομα χρήστη είναι υποχρεωτικό.',
            'min' => 'Το όνομα χρήστη δεν μπορεί να είναι μικρότερο από :min χαρακτήρες.',
            'max' => 'Το όνομα χρήστη δεν μπορεί να είναι μεγαλύτερο από :max χαρακτήρες.',
            'alpha_dash' => 'Το όνομα χρήστη μπορεί να έχει αλφαριθμητικούς χαρακτήρες, καθώς και παύλες και υπογράμμιση.',
        ],

        'email' => [
            'required' => 'Το E-Mail είναι υποχρεωτικό.',
            'email' => 'Το πεδίο E-Mail Address πρέπει να έχει έγκυρη διεύθυνση ηλεκτρονικού ταχυδρομείου.',
            'max' => 'Το πεδίο E-Mail Address δεν μπορεί να είναι μεγαλύτερο από :max χαρακτήρες.'
        ],
      
        'password' => [
            'min' => 'Ο Κωδικός πρόσβασης πρέπει να περιέχει τουλάχιστον :min χαρακτήρες.',
        ],

        'captcha' => [
            'required' => 'Συμπληρώστε το παρακάτω κείμενο.',
            'captcha' => 'Παρακαλώ συμπληρώστε σωστά το κείμενο.',
        ],
      
        
        'subject' => [
            'min' => 'Το Θέμα πρέπει να περιέχει τουλάχιστον :min χαρακτήρες.',
        ],
      

        'msg' => [
            'min' => 'Το Μήνυμα πρέπει να περιέχει τουλάχιστον :min χαρακτήρες.',
        ],
      
        'thl1' => [
            'required' => 'Το πεδίο "Τηλέφωνο 1" είναι υποχρεωτικό.',
            'numeric' => 'Το Τηλέφωνο 1 πρέπει να περιέχει μόνο αριθμούς.',
            'regex' => 'Το Τηλέφωνο 1 πρέπει να έχει τουλάχιστον 10 αριθμούς'     
            
        ],
      
        'thl2' => [
            'numeric' => 'Το Τηλέφωνο 2 πρέπει να περιέχει μόνο αριθμούς.',
            'regex' => 'Το Τηλέφωνο 2 πρέπει να έχει τουλάχιστον 10 αριθμούς'   
        ],
      
        'country' => [
            'required' => 'Η Χώρα είναι υποχρεωτική.',
            'min' => 'Η Χώρα πρέπει να περιέχει τουλάχιστον :min χαρακτήρες.',
            'max' => 'Η Χώρα δεν μπορεί να περιέχει πάνω από :max χαρακτήρες.',
            'alpha' => 'Η Χώρα πρέπει να περιέχει μόνο γράμματα.',
        ],
      
        'city' => [
            'required' => 'Η Πόλη είναι υποχρεωτική.',
            'min' => 'Η Πόλη πρέπει να περιέχει τουλάχιστον :min χαρακτήρες.',
            'max' => 'Η Πόλη δεν μπορεί να περιέχει πάνω από :max χαρακτήρες.',
            'alpha' => 'Η Πόλη πρέπει να περιέχει μόνο γράμματα.',

        ],

        'pic' => [
            'mimes' => 'Η μορφή εικόνας πρέπει να είναι ένα απο τα παρακάτω αρχεία τύπου: :values.',
            'required' => 'Η εικόνα είναι υποχρεωτική.'
        ]
      

    ],






    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
