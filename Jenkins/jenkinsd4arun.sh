docker run -itd -e JENKINS_USER=$(id -u) \
-v /var/run/docker.sock:/var/run/docker.sock \
-v $(pwd)/jenkins_home:/var/jenkins_home \
-v $(which docker):/usr/bin/docker \
-p 8080:8080 -p 50000:50000  \
-u root \
--rm \
--name jenkinsd4a \
jenkinsd4a
