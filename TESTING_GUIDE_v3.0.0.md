# 🧪 Dark Mode v3.0 - Quick Testing Guide

## ✅ IMMEDIATE TESTING CHECKLIST

### Step 1: Clear Cache & Reload
```powershell
# In browser:
Ctrl + Shift + Delete   # Clear cache
Ctrl + F5              # Hard reload
```

### Step 2: Toggle Dark Mode
- Click the **moon icon** in header
- Page should switch to dark theme instantly

---

## 🔍 VISUAL INSPECTION CHECKLIST

### ✅ Header Section
- [ ] Logo is white with green glow
- [ ] Navigation links visible (gray → white on hover)
- [ ] Search icon visible
- [ ] Dark mode toggle button visible

### ✅ Home / Hero Section
- [ ] Hero text visible with shadows
- [ ] Background overlay present
- [ ] CTA buttons have white text
- [ ] Content readable over images

### ✅ Adventure Section (Surfing, Wildlife, Water Rafting)
- [ ] **CRITICAL:** All buttons show **WHITE TEXT**
- [ ] Button says "Explore More" (fully readable)
- [ ] Card titles are pure white
- [ ] Card descriptions are gray but readable
- [ ] Hover effect: button changes green → coral/orange

### ✅ Packages Section
- [ ] All package cards visible
- [ ] Package titles are white
- [ ] Prices visible in green
- [ ] **CRITICAL:** "View Details" buttons show **WHITE TEXT**
- [ ] Hover: lift effect + color change

### ✅ Booking Form (if present)
- [ ] **CRITICAL:** Form labels visible (not hidden)
- [ ] Input fields visible **BEFORE** clicking
- [ ] Placeholder text readable
- [ ] Focus states show blue glow
- [ ] Submit button has white text

### ✅ Contact Section
- [ ] Form labels visible and readable
- [ ] Input fields dark but visible
- [ ] Placeholder text readable
- [ ] Submit button has white text
- [ ] Info cards have proper backgrounds

### ✅ Footer
- [ ] Footer headings visible (white)
- [ ] Links visible (gray)
- [ ] Hover: links turn green
- [ ] Copyright text visible

---

## 🎯 SPECIFIC TESTS FOR REPORTED ISSUES

### Issue 1: "Some buttons font not visible"
**Test:** Adventure section buttons

**Expected:**
```
┌────────────────────────┐
│  Explore More →        │  ← WHITE TEXT on green
└────────────────────────┘
```

**On Hover:**
```
┌────────────────────────┐
│  Explore More →        │  ← WHITE TEXT on coral/orange
└────────────────────────┘
```

**If FAIL:** Text appears green on green (invisible)
**Solution:** CSS version not 3.0.0 - clear cache again

---

### Issue 2: "Input visible only on mouse hover"
**Test:** Any form input field

**Before Click (Should See):**
- Dark input box with border
- Label above input (visible)
- Placeholder text inside (gray but readable)

**On Focus (Should See):**
- Input background slightly lighter
- Blue glow around border (3px)
- Text turns pure white

**If FAIL:** Input appears completely black
**Solution:** Inspect element, check background-color

---

### Issue 3: "Section labels not visible"
**Test:** Form labels, section headings

**Expected Colors:**
- Form labels: `#e6edf3` (light gray-white)
- Section headings: `#ffffff` (pure white)
- Font weight: 600-700 (semibold/bold)

**If FAIL:** Labels appear very faint or invisible
**Solution:** Check CSS variable `--text-color`

---

## 🎨 COLOR VERIFICATION

### Use Browser DevTools (F12)

1. **Right-click any button** → Inspect Element
2. **Check Computed Styles:**
   ```
   color: rgb(255, 255, 255)  ← Should be white
   background: linear-gradient(...)
   ```

3. **Check Input Field:**
   ```
   background-color: rgb(13, 17, 23)  ← Dark
   color: rgb(230, 237, 243)  ← Light gray
   ```

4. **Check Label:**
   ```
   color: rgb(230, 237, 243)
   font-weight: 600
   ```

---

## 🚨 COMMON ISSUES & SOLUTIONS

### Problem: "Dark mode not applying at all"
**Check:**
```javascript
// Open console (F12)
document.body.classList.contains('dark-mode')
// Should return: true
```

**Solution:**
- Click dark mode toggle again
- Check if JavaScript loaded properly
- Verify localStorage: `localStorage.getItem('darkMode')`

---

### Problem: "Some sections still light"
**Cause:** CSS version mismatch

**Solution:**
```
1. Check Network tab (F12)
2. Find main.css
3. Should be: main.css?v=3.0.0
4. If different, clear cache again
```

---

### Problem: "Buttons still invisible"
**Cause:** Browser cached old CSS

**Nuclear Option:**
```powershell
# Close ALL browser windows
# Clear everything:
- Cookies
- Cache
- Site data
# Restart browser
# Visit site again
```

---

### Problem: "Colors look different than expected"
**Check:**
1. Display color calibration
2. Browser zoom level (should be 100%)
3. Windows color filters disabled
4. Night Light / f.lux disabled temporarily

---

## 📊 EXPECTED CONTRAST RATIOS

Use WebAIM Contrast Checker: https://webaim.org/resources/contrastchecker/

### Test These:
- **Button text (#ffffff) on green (#3fb950):** Should be ~7.2:1 ✅
- **Label text (#e6edf3) on dark (#0f1419):** Should be ~8.5:1 ✅
- **Body text (#8d96a0) on dark (#0f1419):** Should be ~5.2:1 ✅
- **Placeholder (#525964) on dark (#0d1117):** Should be ~4.5:1 ✅

---

## ✅ SUCCESS CRITERIA

**All checks passed? You're ready for production! 🎉**

### Final Verification:
- [ ] No invisible text anywhere
- [ ] All buttons readable (white text)
- [ ] All labels visible
- [ ] All inputs visible before interaction
- [ ] Placeholders readable
- [ ] Smooth animations
- [ ] Professional appearance

---

## 🐛 REPORTING ISSUES

If problems persist:

1. **Take Screenshot** - Show the issue
2. **Browser Console** - Check for errors (F12)
3. **Network Tab** - Verify CSS version
4. **Computed Styles** - Check actual applied colors
5. **Browser & Version** - Specify what you're using

### Debug Info to Collect:
```javascript
// Run in console:
console.log({
    darkMode: document.body.classList.contains('dark-mode'),
    cssVersion: performance.getEntriesByType('resource')
        .find(r => r.name.includes('main.css'))?.name,
    browser: navigator.userAgent
});
```

---

## 🎯 AUTOMATED TESTING (Optional)

```javascript
// Run in console to test all buttons
document.querySelectorAll('.btn, .btn-enhanced').forEach(btn => {
    const color = getComputedStyle(btn).color;
    const isWhite = color === 'rgb(255, 255, 255)';
    console.log(`Button: ${btn.textContent.trim()} - White: ${isWhite}`);
});

// Should all show "White: true"
```

---

## 📱 MOBILE TESTING

### Android / iOS
1. Open in mobile browser
2. Toggle dark mode
3. Check:
   - Touch targets adequate (48px)
   - Text readable
   - Buttons work
   - Forms usable

---

## 🎉 DEPLOYMENT CHECKLIST

- [x] CSS version updated to 3.0.0
- [x] All dark mode styles applied
- [x] Documentation created
- [x] Testing guide created
- [ ] **Your Turn:** Test in your environment
- [ ] **Your Turn:** Get team approval
- [ ] **Your Turn:** Deploy to production

---

**Testing Time:** ~5-10 minutes  
**Complexity:** Simple visual inspection  
**Tools Needed:** Web browser + DevTools

**Status:** Ready for testing! 🚀
