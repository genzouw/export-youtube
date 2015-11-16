# -*- mode: ruby -*-
# vi: set ft=ruby :

VAGRANTFILE_API_VERSION = "2"
Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "centos6.5"
  config.vm.box_url = "http://www.lyricalsoftware.com/downloads/centos65.box"
  config.vm.network "private_network", ip: "192.168.33.14"
  config.vm.synced_folder ".", "/vagrant", :owner=> 'vagrant', :group=>'vagrant', :mount_options => ['dmode=775', 'fmode=664']
  config.vm.provider "virtualbox" do |vb|
    vb.customize ["modifyvm", :id, "--memory", "1024"]
  end
end
