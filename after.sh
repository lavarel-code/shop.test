#!/bin/bash

# If you would like to do some extra provisioning you may
# add any commands you wish to this file and they will
# be run after the Homestead machine is provisioned.

function info {
  echo "--> $1"
}

info "install yarn"
sudo npm install -g yarn
