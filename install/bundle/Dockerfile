FROM ubuntu:14.04
MAINTAINER MascoSkray <MascoSkray@gmail.com>

#Update apt and install git
RUN apt-get update -y && apt-get install -y nano git
#Clone the latest UOJ Community verison to local
RUN cd ~ && git clone https://github.com/ybh1998/UOJ-System.git
#Install environment and set startup script
RUN cd ~/UOJ-System/install/bundle && bash install.sh -e && echo "\
#!/bin/bash\n\
if [ ! -f "/var/svn/.UOJSetupDone" ]; then\n\
	cd ~/UOJ-System/install/bundle && bash install.sh -c\n\
fi\n\
service ntp start\n\
service mysql start\n\
service apache2 start\n\
svnserve -d -r /var/svn\n\
su local_main_judger -c \"~/judge_client/judge_client start\"\n\
exec bash\n" >/root/up && chmod +x /root/up

ENV LANG=C.UTF-8 TZ=Asia/Shanghai
EXPOSE 80 3690
CMD /root/up
