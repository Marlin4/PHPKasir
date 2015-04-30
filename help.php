git -c diff.mnemonicprefix=false -c core.quotepath=false push -v --tags unja dev:dev develop:develop master:master
Pushing to ssh://devlatihan@103.26.102.2:54321/home/devlatihan/gitrepo

To ssh://devlatihan@103.26.102.2:54321/home/devlatihan/gitrepo
 = [up to date]      dev -> dev
 = [up to date]      develop -> develop

 = [up to date]      tag -> tag
 = [up to date]      tessssssssssss -> tessssssssssss
 ! [rejected]        master -> master (fetch first)
updating local tracking ref 'refs/remotes/unja/dev'
updating local tracking ref 'refs/remotes/unja/develop'
error: failed to push some refs to 'ssh://devlatihan@103.26.102.2:54321/home/devlatihan/gitrepo'
hint: Updates were rejected because the remote contains work that you do
hint: not have locally. This is usually caused by another repository pushing
hint: to the same ref. You may want to first integrate the remote changes
hint: (e.g., 'git pull ...') before pushing again.

hint: See the 'Note about fast-forwards' in 'git push --help' for details.