/* Requires the Docker Pipeline plugin */
pipeline {
    agent {
             docker { image '2f7e0ceeaa82' }
             docker {image 'aa8d880e4578'}
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




