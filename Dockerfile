FROM wordpress:latest
RUN echo "Build timestamp: $(date)" > /build_info.txt
EXPOSE 80
CMD ["apache2-foreground"]
