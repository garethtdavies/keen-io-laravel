# Keen.io Laravel Helper

A minimal service provider to set up and use the Keen.io PHP library in Laravel 5.

This package consists of a service provider, which binds an instance of an initialized Keen.io client to the 
IoC-container and a Keen facade so you may access all methods of the Keen-io class via the terse syntax:

Keen::addEvent('purchases', $event);

Full details about all available methods may be found [here](https://github.com/keenlabs/KeenClient-PHP)