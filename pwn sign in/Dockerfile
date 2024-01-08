FROM nudttan91/base_pwn_xinetd

LABEL Author="tan91"
LABEL GitHub="https://github.com/NUDTTAN91"
LABEL Blog="zxw-nudt.blog.csdn.net"

RUN rm -rf /tmp/*

COPY src /tmp/
COPY file /

RUN cp /tmp/pwn /home/ctf/pwn
RUN cp /tmp/pwn.xinetd.conf /etc/xinetd.d/pwn
RUN chown root:ctf /home/ctf/pwn
RUN chmod 750 /home/ctf/pwn

RUN rm -rf /tmp/pwn.xinetd.conf
RUN apt-get clean && rm -rf /var/lib/apt/lists/* /var/tmp/*