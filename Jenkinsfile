/* Requires the Docker Pipeline plugin */
pipeline {
    agent {
             docker { image 'node:20.10.0-alpine3.19' }
        }
    stages {
        stage('Build') {
            steps {
                sh 'echo "Hello World"'
                sh '''
                    echo "Multiline shell steps works too"
                    ls -lah
                '''
            }
        }
    }
}




