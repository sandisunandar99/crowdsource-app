FROM mysql:5.7

# set timezone
ENV TZ=Asia/Jakarta
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# Copy conf files
COPY image-files/ /

# Expose port
EXPOSE 3306