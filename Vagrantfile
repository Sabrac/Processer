VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "Sabrac/BaseLaravel"
  config.vm.box_version = "1.0"

  config.ssh.username = "vagrant"
  config.ssh.password = "vagrant"

  config.vm.network :private_network, mac: "0800276BA89A", ip: "192.168.223.223"
  config.vm.network :forwarded_port, host: 8888, guest: 8888
  config.vm.network :forwarded_port, host: 4444, guest: 4444

  config.vm.synced_folder ".", "/usr/share/nginx/project",:mount_options => ['dmode=777','fmode=777'], disabled: true, type: "nfs"

  config.vm.provision :shell, :inline => <<-EOS
  EOS

  config.vm.provider :virtualbox do |vb|
    vb.customize ["modifyvm", :id, "--natdnsproxy1", "on"]
    vb.customize ["modifyvm", :id, "--natdnshostresolver1", "off"]
    vb.customize ["modifyvm", :id, "--cpus", "4"]
    vb.customize ["modifyvm", :id, "--memory", "2048"]
  end
end
