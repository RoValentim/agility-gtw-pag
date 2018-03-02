pipeline {
  agent any
  stages {
    stage('Pre-build') {
      steps {
        echo 'Pre-build'
      }
    }
    stage('Testes') {
      steps {
        sh 'echo "aplicando testes..."'
      }
    }
    stage('Deploy') {
      steps {
        echo 'Deploy'
        sh 'oc login https://35.231.119.29:8443 --token=SLHo3O59nXeDjEjSuBv-YRPsZ7WkKy9DY1FqK7nqoSc'
        sh 'oc project agility-gtw-pag'
        sh 'oc start-build agility-gtw-pag'
        echo 'OK'
      }
    }
  }
}