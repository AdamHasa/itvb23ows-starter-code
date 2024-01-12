/* Requires the Docker Pipeline plugin */
pipeline {
  agent {
    docker {
      image 'php:7.4-apache'
    }
  }
  stages{
    stage('SonarQube'){
        agent { label '!windows'}
        steps {
            script{
                scannerHome = tool 'TestSonarQubeScanner'
            }
            withSonarQubeEnv('TestingSonarCube'){
                sh "${scannerHome}/bin/sonar-scanner -Dsonar.projectKey=TestingSonarCube"
            }
         }
      }
    }
}






