<?php
$id = $_GET['id'];
if ($id == '') {
    die('no id specified');
}
?>
[global]
keyboard = "fr"
country = "fr"
fqdn = "pve<?php echo $id ?>.cl.lab.mpgn.dev"
mailto = "pvecluster+<?php echo $id ?>@mpgn.dev"
timezone = "Indian/Reunion"
root_password = "changeme"
root_ssh_keys = [
    "ssh-ed25519 AAAAC3NzaC1lZDI1NTE5AAAAIPBkVyeYWnyWi4yBTj8SQ57Uxf9InagN/aeId7MwGcs0 matthieu@matthieu-archlinux"
]
reboot_on_error = true

[network]
source = "from-dhcp"

[disk-setup]
filesystem = "ext4"
disk_list = ["nvme0n1"]
