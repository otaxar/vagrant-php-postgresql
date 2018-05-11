# Make sure the Apt package lists are up to date, so we're downloading versions that exist.
cookbook_file "apt-sources.list" do
  path "/etc/apt/sources.list"
end
execute 'apt_update' do
  command 'apt-get update'
end

# Base configuration recipe in Chef.
package "wget"
package "ntp"
package "php"
package "postgresql"
package "tree"
package "ack-grep"
package "apache2"
package "libapache2-mod-php"

#cookbook_file "index.html" do
# path "/var/www/html/index.html"
#end

cookbook_file "ntp.conf" do
  path "/etc/ntp.conf"
end

execute 'ntp_restart' do
  command 'service ntp restart'
end

execute 'mod' do
	command 'a2enmod php7.0'
end

execute 'apache2_reload' do
	command 'service apache2 reload'
end

execute 'move_files' do
	command 'sudo cp /home/vagrant/myproject/*.* /var/www/html'
end



