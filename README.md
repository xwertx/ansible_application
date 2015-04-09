# ansible_application

To run application:
1. set serwer user in application_playbook.yml
2. set ip addres in hosts file (don't remove [dev] line)
3. run command: ansible-playbook application_playbook.yml -i hosts -s -K
