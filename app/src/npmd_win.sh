docker run --rm -i -v $(cmd //c cd):/app node:latest npm $@
# docker run --rm -i -v $(cmd //c cd):/app -w "/app" node:latest npm $@