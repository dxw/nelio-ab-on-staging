# Nelio AB On Staging

The default behaviour of the Nelio AB Testing plugin is to disable some of its functionality on environments whose URL includes the string "staging".

This makes sense if you e.g. have a paid-for license key in use on prod that is mirrored to staging, but don't want to burn your usage allocation on staging. But for most of our clients, where we won't have an API key in place on staging, it just means they can't fully test AB testing in the staging environment.

This plugin removes the staging restriction, so all functionality works on staging environments.