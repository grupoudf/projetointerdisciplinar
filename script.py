# GPL v.3
# se tiver wget estiver em sua máquina local, comando > $ python main.py
# para instalar ou obter maiores informações https://pypi.org/project/wget/

import wget

xampp = 'https://www.apachefriends.org/xampp-files/7.2.29/xampp-windows-x64-7.2.29-0-VC15-installer.exe'
download_xampp = wget.download(xampp)

ngrok = 'https://bin.equinox.io/c/4VmDzA7iaHb/ngrok-stable-windows-amd64.zip'
download_ngrok = wget.download(ngrok)

mysqlworkbench = 'https://cdn.mysql.com/archives/mysql-workbench/mysql-workbench-community-8.0.18-winx64.msi'
download_mysqlworkbench = wget.download(mysqlworkbench)
