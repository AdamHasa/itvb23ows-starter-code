/* Requires the Docker Pipeline plugin */
pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                bat 'set'
                bat sh 'mvn --version'
//                 bat sh retry(3) {
//                                            sh './flakey-deploy.sh'
//                                        }
//                 bat timeout(time: 3, unit: 'MINUTES') {
//                                         sh './health-check.sh'
//                                     }
//                 bat timeout(time: 3, unit: 'MINUTES') {
//                                         retry(5) {
//                                             sh './flakey-deploy.sh'
//                                         }
            }
        }
    }
}



