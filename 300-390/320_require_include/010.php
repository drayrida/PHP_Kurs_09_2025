<?php

// require_one bindet eien Datei nur einmalig (once) ein
require_once 'hello.php';
require_once 'hello.php'; // Diese Zeile macht nichts, da 'hello.php' schon eingebunden ist.

// require bindet eine Datei jedes Mal neu ein.

require_once 'hello.php';
require_once 'hello.php';
require_once 'hello.php';
require_once 'hello.php';

// Bei require/require_once wird das Skript abgebrochen.
// Wenn die einzubindende Datei nicht gefunden wird.
# require 'hello_world.php';

// Bei inlcude/include_once wird das Skript, trotz 'Warning', nicht abgebrochen
// Daher bindet man wichtige Sachen(z.B BD-Verbindung) mit require ein
// und unwichtige Sachen (Layout-Element) mit include.
include 'hello_world.php';
echo 'Hello World!';
