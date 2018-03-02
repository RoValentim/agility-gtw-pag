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
        sh '''oc login https://35.231.119.29:8443 --username=develop --password=\' \';
/opt/openshift-origin-client-tools-v3.7.0-7ed6862-linux-64bit/oc project agility-gtw-pag'''
        sh '/opt/openshift-origin-client-tools-v3.7.0-7ed6862-linux-64bit/oc start-build agility-gtw-pag'
        echo 'OK'
      }
    }
  }
}