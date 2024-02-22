# Собирает статику
build-static:
	docker run \
		--rm \
		-p 3000:3000 \
		-v $(shell pwd):/usr/src/botec-web \
		-w /usr/src/botec-web \
		node:latest \
		/bin/sh -c \
		"npm install && npm run build"

