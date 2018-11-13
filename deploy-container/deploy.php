<?php
    // PHP Script to run a container.
    // Pull a container image from a container repository.
    function pullContainer($containerImage) {
        // Run the command on the localhost to pull a container.
        exec('docker pull '.$containerImage, $output, $returnval);
        if($returnval != 0) {
            echo "The image could not be pulled.\n";
        } else {
            echo "The image was pulled successfully.\n";
        }
    }
    // Run a container with an external port and name.
    function runContainer($containerImage, $containerName, $internalPort = NULL, $externalPort = NULL, $daemonize = TRUE) {
        // Run the container based on the parameters.
        if($daemonize == TRUE && ($internalPort == NULL && $externalPort == NULL)) {
            $command = 'docker run -d -it --name '.$containerName.' '.$containerImage.' /bin/bash';
            exec($command, $output, $returnval);
            echo $returnval."\n".$output[0]."\n";
        } else {

        }
    }
    // Stop a running container.
    function stopContainer($containerName) {
        exec('docker stop '.$containerName, $output, $returnval);
        echo $output[0]."\n";
    }
    // Remove the container.
    function removeContainer($containerName) {
        exec('docker rm '.$containerName, $output, $returnval);
        echo $output[0]."\n";
    }
    pullContainer('memcached:latest');
    //runContainer('debian:latest', 'testdeb');
    //stopContainer('testdeb');
    //removeContainer('testdeb');
?>