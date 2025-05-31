# Dockerfile for Nginx
FROM nginx:alpine

# Remove default config
RUN rm /etc/nginx/conf.d/default.conf

# Copy custom nginx config
COPY nginx.conf /etc/nginx/conf.d

# Expose port 80
EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]
