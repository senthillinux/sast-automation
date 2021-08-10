FROM ubuntu:latest
MAINTAINER "Senthil Kumar - DevOps Engineer"
ARG DEBIAN_FRONTEND=noninteractive
ENV TZ=Asia/Kolkata
RUN apt-get update && \
    apt-get install -y apache2 tzdata
