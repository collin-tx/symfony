Vagrant.configure(2) do |config|
  config.ssh.insert_key = false
  #config.vm.define :serviceline

  config.vm.box = "brightmarch/debian-buster64"
  config.vm.box_version = "4.0.2"

  #config.vm.provision "shell", path: "app/config/provision"
  #config.vm.provision "shell", path: "app/config/startup", run: "always"

  config.vm.network "forwarded_port", guest: 8000, host: 8000, auto_correct: true
  config.vm.network "private_network", ip: "192.168.100.100"
  config.vm.hostname = "symfony.test"
  #config.vm.synced_folder ".", "/var/apps/symfony", nfs: true

  config.vm.provider "virtualbox" do |v|
    v.default_nic_type = nil

    v.gui = false
    v.memory = 2048
  end

  config.vbguest.auto_update = false
end
