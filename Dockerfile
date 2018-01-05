#VOTE WEB VERSION 2 IMAGE 
#Base Image
FROM	centos:7.3.1611
# Meta Data 
COPY 	index.php /var/www/html/
LABEL   version=v1 \
        maintainer=dockergiri@hotmail.com		
RUN	yum -y install httpd epel-release yum-utils http://rpms.remirepo.net/enterprise/remi-release-7.rpm && \
	yum clean all && \
	yum-config-manager --enable remi-php71 && \
	yum -y install php php-mysqli php-mcrypt php-cli php-gd php-curl php-mysql php-fileinfo && \
    	yum clean all 
 
#Listen on below port
EXPOSE 80

# Always execute entry point
ENTRYPOINT	["/usr/sbin/httpd"]

# Run process in foregroud as a parameter
CMD		["-DFOREGROUND"] 
