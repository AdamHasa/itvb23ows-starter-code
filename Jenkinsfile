/* Requires the Docker Pipeline plugin */
pipeline {
    agent {
             docker { image 'php:7.4-apache' }
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
         stage('Test'){
            steps{
            sh './gradlew check'
                }
            }
        }
    }
    post {
            always {
                //archiveArtifacts artifacts: 'build/libs/**/*.jar', fingerprint: true
                junit 'build/reports/**/*.xml'
            }
        }
}




