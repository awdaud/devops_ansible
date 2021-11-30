Vagrant.configure(2) do |config|
	config.vm.box = "generic/ubuntu2004"
	config.vm.provider "virtualbox" do |vb|
    vb.gui = false
		vb.memory = "500"
    #vb.cpu = "1"
  end
  config.vm.synced_folder "../", "/Ansible"
  config.ssh.password = "vagrant"
  
  config.vm.define "haproxy" do |haproxy|
    haproxy.vm.hostname = "haproxy"
    haproxy.vm.network  "private_network", ip: "192.168.56.10"
  end

  config.vm.define "web1" do |web1|
    web1.vm.hostname = "web1"
    web1.vm.network  "private_network", ip: "192.168.56.11"
  end

  config.vm.define "web2" do |web2|
    web2.vm.hostname = "web2"
    web2.vm.network  "private_network", ip: "192.168.56.12"
  end
	
  config.vm.define "db" do |db|
    db.vm.hostname = "db"
    db.vm.network  "private_network", ip: "192.168.56.9"
  end


end