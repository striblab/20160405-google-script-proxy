# Google Script Proxy

A simple script intended to pass data from script.google.com. Forked from BenOvermyer.

[Safari has a nasty security bug](https://stackoverflow.com/questions/23311054/405-method-not-allowed-works-on-everything-except-ios-safari) that throws a 405 error when attempting to load data from a Google Script, which also affects every iOS device on Earth (truly embarassing, Apple).

The only way around it is PHP, often in the webpage itself to dump data as a string on the server-side. This is problematic because many environments don't run PHP, including Github Pages and Amazon S3.

Our ultimate solution, thanks to BenOvermyer, was to set up this PHP-based proxy up on an internal server that runs PHP, to mask Google's domain names from Safari and iOS so they don't freak out.

Simply pass a script's parameters to the URL and it will dump the data as text onto the page, for use with jQuery AJAX, d3 and other means of handling JSON and other data streams on a page.


